<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller {
        public function __construct(){
        parent::__construct();
             $this->load->helper('url');
            $this->load->model('miniatur_model');
        }

        public function index()
        {
            if(isset($_POST["reg"])){
                        $config['upload_path'] = './asset/img/foto/';
                    $config['allowed_types'] = 'jpg|png|jpeg|GIF|JPG|PNG|JPEG';
                    $config['max_size'] = 200048;
                    $config['file_name'] = $this->input->post('namaketua');
                    $this->upload->initialize($config);

                    if ( ! $this->upload->do_upload('bukti'))//ini name di input choose file
                    {

                    }
                    else
                    {
                    // $foto_lama = $this->kader->getbyID($this->input->post('id_kader'))->foto;
                    // unlink($config['upload_path'].$foto_lama);

                    $datas = $this->upload->data();
                    $edit['image_library'] = 'gd2';
                    $edit['source_image']   = './asset/img/foto/'.$datas['file_name'];
                    $edit['create_thumb'] = TRUE;
                    $edit['maintain_ratio'] = TRUE;
                    $edit['height'] = 600;
                    $this->load->library('image_lib', $edit);
                    $this->image_lib->resize();
                    $edit_file = explode('.', $datas['file_name']);
                    $data['foto'] = $edit_file[0].'_thumb.'.$edit_file[1];
                    unlink($config['upload_path'].$datas['file_name']);
                    }


                    $data['nama'] = $this->input->post('namaketua');
                    $data['email'] = $this->input->post('emailketua');
                    $data['nohp'] = $this->input->post('nohpketua');
                    $data['alamat'] = $this->input->post('alamatketua');
                    $data['ptasal'] = $this->input->post('ptasal');
                    $data['ptalamat'] = $this->input->post('ptalamat');
                    $data['jabatan'] = "ketua";
                    $nb = $this->input->post('nohpketua');
                    $data['nohp_ketua'] = md5($nb);
                    $data['tanggal_daftar'] = gmdate("d-m-Y", time()+60*60*7)." Pukul ". gmdate("h:i", time()+60*60*7);

                    $data1['nama'] = $this->input->post('namaanggota1');
                    $data1['email'] = $this->input->post('emailanggota1');
                    $data1['nohp'] = $this->input->post('nohpanggota1');
                    $data1['alamat'] = $this->input->post('alamatanggota1');
                    $data1['ptasal'] = $this->input->post('ptasal');
                    $data1['ptalamat'] = $this->input->post('ptalamat');
                    $data1['jabatan'] = "anggota1";
                    $nb1 = $this->input->post('nohpketua');
                    $data1['nohp_ketua'] = md5($nb1);

                    $data2['nama'] = $this->input->post('namaanggota2');
                    $data2['email'] = $this->input->post('emailanggota2');
                    $data2['nohp'] = $this->input->post('nohpanggota2');
                    $data2['alamat'] = $this->input->post('alamatanggota2');
                    $data2['ptasal'] = $this->input->post('ptasal');
                    $data2['ptalamat'] = $this->input->post('ptalamat');
                    $data2['jabatan'] = "anggota2";
                    $nb2 = $this->input->post('nohpketua');
                    $data2['nohp_ketua'] = md5($nb2);

                    $data3['nama'] = $this->input->post('namaanggota3');
                    $data3['email'] = $this->input->post('emailanggota3');
                    $data3['nohp'] = $this->input->post('nohpanggota3');
                    $data3['alamat'] = $this->input->post('alamatanggota3');
                    $data3['ptasal'] = $this->input->post('ptasal');
                    $data3['ptalamat'] = $this->input->post('ptalamat');
                    $data3['jabatan'] = "anggota3";
                    $nb3 = $this->input->post('nohpketua');
                    $data3['nohp_ketua'] = md5($nb3);

                    $a = $this->miniatur_model->insertPeserta($data, $data1, $data2, $data3);
                    if($a){
                        //$this->sendmail();
                    }else{
                        echo "<center><h1>Maaf proses pendaftaran mengalami error, silahkan lakukan pendaftaran ulang</h1></center>";
                    }
            }
            $this->load->view('pendaftaran');
        }

        public function sendmail(){

                $namaketua = $this->input->post("namaketua");
                $emailketua = $this->input->post("emailketua");
                $nohpketua = $this->input->post("nohpketua");
                $alamatketua = $this->input->post("alamatketua");
                $ptasal = $this->input->post("ptasal");
                $ptalamat = $this->input->post("ptalamat");

                $namaanggota1 = $this->input->post("namaanggota1");
                $emailanggota1 = $this->input->post("emailanggota1");
                $nohpanggota1 = $this->input->post("nohpanggota1");
                $alamatanggota1 = $this->input->post("alamatanggota1");

                $namaanggota2 = $this->input->post("namaanggota2");
                $emailanggota2 = $this->input->post("emailanggota2");
                $nohpanggota2 = $this->input->post("nohpanggota2");
                $alamatanggota2 = $this->input->post("alamatanggota2");

                $namaanggota3 = $this->input->post("namaanggota3");
                $emailanggota3 = $this->input->post("emailanggota3");
                $nohpanggota3 = $this->input->post("nohpanggota3");
                $alamatanggota3 = $this->input->post("alamatanggota3");

                include "classes/class.phpmailer.php";
            $mail = new PHPMailer;

            $mail->SMTPSecure = 'ssl';
            $mail->Host = "smtp.gmail.com"; //host masing2 provider email
            $mail->SMTPDebug = 2;
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->Username = "theoafnt@gmail.com"; //user email
            $mail->Password = "passwordbuatminiatur"; //password email
            $mail->SetFrom("theoafnt@gmail.com","Pendaftaran Miniatur Undip"); //set email pengirim
            $mail->Subject = "Pendaftaran Miniatur Undip, Tim ".$ptasal; //subyek email
            $mail->AddAddress("sayembara@miniatur-undip.com");  //tujuan email

            $mail->MsgHTML("Pendaftaran Miniatur Undip Tim ".$ptasal."<br>".
                "Nama Ketua : ".$namaketua."<br>".
                "Email : ".$emailketua."<br>".
                "Nomer HP : ".$nohpketua."<br>".
                "Alamat : ".$alamatketua."<br>"."<br>".

                "Nama Anggota 1 : ".$namaanggota1."<br>".
                "Email Anggota 1 : ".$emailanggota1."<br>".
                "Nomer HP Anggota 1 : ".$nohpanggota1."<br>".
                "Alamat Anggota 1 : ".$alamatanggota1."<br>"."<br>".

                "Nama Anggota 2 : ".$namaanggota2."<br>".
                "Email Anggota 2 : ".$emailanggota2."<br>".
                "Nomer HP Anggota 2 : ".$nohpanggota2."<br>".
                "Alamat Anggota 2 : ".$alamatanggota2."<br>"."<br>".

                "Nama Anggota 3 : ".$namaanggota3."<br>".
                "Email Anggota 3 : ".$emailanggota3."<br>".
                "Nomer HP Anggota 3 : ".$nohpanggota3."<br>".
                "Alamat Anggota 3 : ".$alamatanggota3."<br>"
         );
                $file_to_attach = $_FILES['attachment']['tmp_name'];
                $filename=$_FILES['attachment']['name'];
                $mail->AddAttachment( $file_to_attach , $filename );


                $file_to_attach1 = $_FILES['fotoktmanggota1']['tmp_name'];
                $filename1 = $_FILES['fotoktmanggota1']['name'];
                $mail->AddAttachment( $file_to_attach1 , $filename1 );

                $file_to_attach2 = $_FILES['fotoktmanggota2']['tmp_name'];
                $filename2 = $_FILES['fotoktmanggota2']['name'];
                $mail->AddAttachment( $file_to_attach2 , $filename2 );

                $file_to_attach3 = $_FILES['fotoktmanggota3']['tmp_name'];
                $filename3 = $_FILES['fotoktmanggota3']['name'];
                $mail->AddAttachment( $file_to_attach3 , $filename3 );

                $file_to_attach4 = $_FILES['bukti']['tmp_name'];
                $filename4 = $_FILES['bukti']['name'];
                $mail->AddAttachment( $file_to_attach4 , $filename4 );

            if($mail->Send())
            {
                redirect('f1f062f2fd3a8d30d0cda11d0e7ad678b200f07a');
                // $this->insertData();
            }
            else
            {
                echo "Pendaftaran gagal, silahkan lakukan kembali";
            }
        }

        public function berhasil(){
            $this->load->view('berhasil');
        }

        public function pendaftaranseminar(){
                if(isset($_POST["daftar"])){
                $nama = $this->input->post("nama");
                $emai = $this->input->post("email");
                $nohp = $this->input->post("nohp");
                $idline = $this->input->post("idline");

                include "classes/class.phpmailer.php";
            $mail = new PHPMailer;

            $mail->SMTPSecure = 'ssl';
            $mail->Host = "smtp.gmail.com"; //host masing2 provider email
            $mail->SMTPDebug = 2;
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->Username = "theoafnt@gmail.com"; //user email
            $mail->Password = "passwordbuatminiatur"; //password email
            $mail->SetFrom("theoafnt@gmail.com","Pendaftaran Miniatur Undip"); //set email pengirim
            $mail->Subject = "Pendaftaran Seminar Nasional, ".$nama; //subyek email
            $mail->AddAddress("sayembara@miniatur-undip.com");  //tujuan email

            $mail->MsgHTML("Pendaftaran Seminar Nasional, ".$nama."<br>"."<br>".
                "Nama Ketua : ".$nama."<br>".
                "Email : ".$email."<br>".
                "Nomer HP : ".$nohp."<br>".
                "Id Line : ".$idline."<br>"."<br>"
         );

            if($mail->Send())
            {
                redirect('f1f062f2fd3a8d30d0cda11d0e7ad678b207a976');
                // $this->insertData();
            }
            else
            {
                echo "Pendaftaran gagal, silahkan lakukan kembali";
            }
    }$this->load->view('pendaftaran_seminar');
}
        public function berhasil_seminar(){
            $this->load->view('berhasil_seminar');
        }

     public function login_admin(){

            $data["judul"] = "";
            if($this->session->userdata("login") != ""){
                redirect('lomba');
            }else{
                if(isset($_POST["login"])){
                $username = $this->input->post("username");
                $pass = $this->input->post("password");
                $passmd5 = md5($pass);
                $password = sha1($passmd5);


                $e = $this->miniatur_model->login($username, $password);
                if($e->num_rows() > 0)
                {
                    $this->session->set_userdata('login', $username);
                    redirect ('lomba');
                }
                else{
                    $data["alert_reg"] = "<p><b>*Username atau password salah</b></p>";
                }


            }
            }

             $this->load->view("admin_login",$data);
        }

        public function hal_admin(){
            if($this->session->userdata("login") != ""){
            $data["peserta"] = $this->miniatur_model->list_peserta();
            $this->load->view("admin_home",$data);
        }else{
            redirect('login');
        }
        }

        public function seminar(){
            if($this->session->userdata("login") != ""){
            $data["pesertaseminar"] = $this->miniatur_model->list_pesertaseminar();
            $this->load->view("seminar_home",$data);
        }else{
            redirect('login');
        }
        }

        public function getAnggota($no){
          if($this->session->userdata("login") != ""){
            $this->load->model("miniatur_model");
            $data['peserta'] = $this->miniatur_model->getAnggota($no);
            $data['peserta1'] = $this->miniatur_model->getAnggota1($no);
            $data['peserta2'] = $this->miniatur_model->getAnggota2($no);
            $data['peserta3'] = $this->miniatur_model->getAnggota3($no);
            $this->load->view('listpeserta', $data);
        }
        else {
            redirect ('do_login_admin');
        }}



        public function logout_admin()
        {
                $this->session->sess_destroy();
                redirect('login');
        }

    }
