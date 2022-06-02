<?php
class Pages extends Controller
{

    public function index()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }

    public function about()
    {
        $viewPath = VIEWS_PATH . 'pages/About.php';
        require_once $viewPath;
        $aboutView = new About($this->getModel(), $this);
        $aboutView->output();
    }
        public function reservation()
    {
        $viewPath = VIEWS_PATH . 'pages/Reservation.php';
        require_once $viewPath;
        $reservationView = new Reservation($this->getModel(), $this);
        $reservationView->output();
    }
          public function eventdetails()
    {
        $viewPath = VIEWS_PATH . 'pages/EventDetails.php';
        require_once $viewPath;
        $eventdetailsView = new EventDetails($this->getModel(), $this);
        $eventdetailsView->output();
    }
    
            public function AddSuppliers()
    {
                $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $registerModel->setName(trim($_POST['name']));
            $registerModel->setEmail(trim($_POST['email']));
            $registerModel->setNumber(trim($_POST['number'])); 
            $registerModel->setSupplies(trim($_POST['supplies']));         
            $registerModel->Add();
                    redirect('pages/ViewSuppliers');

        }
        $viewPath = VIEWS_PATH . 'pages/AddSuppliers.php';
        require_once $viewPath;
        $AddSupplierView = new AddSuppliers($this->getModel(), $this);
        $AddSupplierView->output();
    }
   public function info()
    {
        $viewPath = VIEWS_PATH . 'pages/info.php';
        require_once $viewPath;
        $infoView = new info($this->getModel(), $this);
        $infoView->output();
    }
    
        public function AddUpcomingEvents()
    {

           $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $picture = $_FILES['picture']['name'];
            $picture_tmp = $_FILES['picture']['tmp_name'];

             move_uploaded_file($picture_tmp,"C:\Users\Rawan\Desktop\1111\htdocs\MVC\public\images".$picture);

            $registerModel->setTitle(trim($_POST['title1']));
            $registerModel->setDate(trim($_POST['date']));
             $registerModel->setTime(trim($_POST['time']));
            $registerModel->setLocation(trim($_POST['location'])); 
            $registerModel->setPicture($_FILES["picture"]['name']);        
            $registerModel->Add();
                    redirect('pages/adminPage');

        }
        $viewPath = VIEWS_PATH . 'pages/AddUpcomingEvents.php';
        require_once $viewPath;
        $upcomingeventsView = new AddUpcomingEvents($this->getModel(), $this);
        $upcomingeventsView->output();
    }



}
