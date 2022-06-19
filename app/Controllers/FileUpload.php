<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class FileUpload extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function upload()
    {
        helper(['form', 'url']);
        $database = \Config\Database::connect();
        $db = $database->table('assets');
        $msg = 'Please select a valid files';
        $ar = ['img1', 'img2', 'sfx'];
        foreach ($ar as $a) {
            $i = 0;
            $file = $this->request->getFile($a);
            if (!$file->isValid()) {

            } else {

                $file->move(ROOTPATH . '/public/uploads');

                $data = [
                    'attr' => $a,
                    'name' => $file->getClientName(),
                ];
                $save = $db->replace($data);
            }

            $msg = 'Files have been successfully uploaded';
            $i++;
        }

        return redirect()->to(base_url('/dashboard'))->with('msg', $msg);
    }
}
