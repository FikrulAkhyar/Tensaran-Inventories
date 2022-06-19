<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InventoryModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use CodeIgniter\API\ResponseTrait;

class Inventories extends BaseController
{
    use ResponseTrait;

    public function __construct()
    {
        $this->inventoryModel = new InventoryModel();
        $this->session = \Config\Services::session();
    }

    // Menampilkan halaman inventaris
    public function index()
    {
        if (!$this->session->get('username')) {
            return redirect()->to('/login');
        }

        $inventaris = $this->inventoryModel->orderBy('id_inventory', 'desc')->findAll();

        $data = [
            'inventaris' => $inventaris
        ];
        return view('inventories/index', $data);
    }

    // Untuk menyimpan data inventaris
    public function store()
    {
        $uploadDir = APPPATH . '../public/img/gambar_barang/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $data = [
            'code' => 'INV/TNS/' . $this->request->getPost('tahun'),
            'name' =>  $this->request->getPost('nama_barang'),
            'amount' => $this->request->getPost('jumlah'),
            'type' => $this->request->getPost('tipe_barang'),
            'year' => $this->request->getPost('tahun'),
            'condition' => $this->request->getPost('kondisi_barang'),
            'price' => $this->request->getPost('harga'),
            'source' => $this->request->getPost('sumber'),
            'note' => $this->request->getPost('keterangan')
        ];

        $image = $this->request->getFile('gambar_barang');
        if ($image->getName() != '') {
            $data['image'] = $image->getName();
            file_put_contents($uploadDir . $data['image'], file_get_contents($this->request->getFile('gambar_barang'), FILE_USE_INCLUDE_PATH));
        }

        $this->inventoryModel->insert($data);
        // return redirect()->to('inventaris');
        return $this->respond(['message' => 'Berhasil Menyimpan Data'], 200);
    }

    // Untuk mengubah data inventaris
    public function update()
    {
        $uploadDir = APPPATH . '../public/img/gambar_barang/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $id = $this->request->getPost('id');
        $data = [
            'code' => 'INV/TNS/' . $this->request->getPost('tahun'),
            'name' =>  $this->request->getPost('nama_barang'),
            'amount' => $this->request->getPost('jumlah'),
            'type' => $this->request->getPost('tipe_barang'),
            'year' => $this->request->getPost('tahun'),
            'condition' => $this->request->getPost('kondisi_barang'),
            'price' => $this->request->getPost('harga'),
            'source' => $this->request->getPost('sumber'),
            'note' => $this->request->getPost('keterangan')
        ];

        $image = $this->request->getFile('gambar_barang');
        if ($image->getName() != '') {
            $oldPhoto = $this->inventoryModel->find($id)['image'];
            if ($oldPhoto) {
                unlink($uploadDir . $oldPhoto);
            }

            $data['image'] = $image->getName() . '.png';
            file_put_contents($uploadDir . $data['image'], file_get_contents($this->request->getFile('gambar_barang'), FILE_USE_INCLUDE_PATH));
        }

        $this->inventoryModel->update($id, $data);
        // return redirect()->to('inventaris');
        return $this->respond(['message' => 'Berhasil Mengubah Data'], 200);
    }

    // Untuk menghapus data inventaris
    public function delete()
    {
        $uploadDir = APPPATH . '../public/img/gambar_barang/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $id = $this->request->getPost('id');
        $data = $this->inventoryModel->find($id);
        if ($data['image'] != null) {
            unlink($uploadDir . $data['image']);
        }
        $this->inventoryModel->delete($id);

        // return redirect()->to('inventaris');
        return $this->respond(['message' => 'Berhasil Menghapus Data'], 200);
    }

    // Untuk menghapus gambar inventaris saja
    public function delete_image()
    {
        $uploadDir = APPPATH . '../public/img/gambar_barang/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $id = $this->request->getPost('id');
        $data = $this->inventoryModel->find($id);
        if ($data['image'] != null) {
            unlink($uploadDir . $data['image']);
        }

        $this->inventoryModel->where('id_inventory', $id)->set('image', null)->update();
        // return redirect()->to('inventaris');
        return $this->respond(['message' => 'Berhasil Menghapus Gambar'], 200);
    }

    // Untuk mengekspor data ke excel
    public function excel_inventories()
    {
        if (!$this->session->get('username')) {
            return redirect()->to('/login');
        }

        $data = $this->inventoryModel->orderBy('year', 'asc')->findAll();

        if (!$data) {
            return redirect()->to('inventaris');
        }

        $spreadsheet = new Spreadsheet();
        $spreadsheet->setActiveSheetIndex(0);
        $mainSheet = $spreadsheet->getActiveSheet();

        $spreadsheet->getActiveSheet()->mergeCells("A1:I1");
        $spreadsheet->getActiveSheet()->mergeCells("A2:I2");
        $mainSheet->setCellValue('A1', 'LAPORAN HASIL INVENTARISASI (LHI)');
        $mainSheet->setCellValue('A2', 'BERUPA PERALATAN DAN MESIN KAMPUNG TENSARAN');
        $spreadsheet->getActiveSheet()->getStyle('A1:A2')->getAlignment()->setHorizontal('center');

        for ($i = 0; $i < count($data); $i++) {
            $mainSheet->setCellValue('A4', 'No');
            $mainSheet->setCellValue('B4', 'Nama Barang');
            $mainSheet->setCellValue('C4', 'Kode Barang');
            $mainSheet->setCellValue('D4', 'Jumlah');
            $mainSheet->setCellValue('E4', 'Merek/Tipe');
            $mainSheet->setCellValue('F4', 'Tahun');
            $mainSheet->setCellValue('G4', 'Kondisi');
            $mainSheet->setCellValue('H4', 'Harga');
            $mainSheet->setCellValue('I4', 'Sumber Dana');
            $mainSheet->setCellValue('J4', 'Keterangan');
            $spreadsheet->getActiveSheet()->getStyle('A4:J4')->getAlignment()->setHorizontal('center');
            $spreadsheet->getActiveSheet()->getStyle("A4:J4")->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN)->setColor(new Color('000000'));

            $mainSheet->setCellValue('A' . intval($i + 5), intval($i + 1));
            $mainSheet->setCellValue('B' . intval($i + 5), $data[$i]['name']);
            $mainSheet->setCellValue('C' . intval($i + 5), $data[$i]['code']);
            $mainSheet->setCellValue('D' . intval($i + 5), $data[$i]['amount']);
            $mainSheet->setCellValue('E' . intval($i + 5), $data[$i]['type']);
            $mainSheet->setCellValue('F' . intval($i + 5), $data[$i]['year']);
            $mainSheet->setCellValue('G' . intval($i + 5), $data[$i]['condition']);
            $mainSheet->setCellValue('H' . intval($i + 5), 'Rp ' . number_format($data[$i]['price'], 0, ",", "."));
            $mainSheet->setCellValue('I' . intval($i + 5), $data[$i]['source']);
            $mainSheet->setCellValue('J' . intval($i + 5), $data[$i]['note']);
            $spreadsheet->getActiveSheet()->getStyle("A" . intval($i + 5) . ":" . "J" . intval($i + 5))->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN)->setColor(new Color('000000'));
        }
        $char = range('A', 'J');
        for ($i = 0; $i < count($char); $i++) {
            $mainSheet->getColumnDimension($char[$i])->setAutoSize(true);
        }

        $writer = new Xlsx($spreadsheet);
        $filename = date('Y-m-d-His') . '-Inventaris-Tensaran';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
    }
}
