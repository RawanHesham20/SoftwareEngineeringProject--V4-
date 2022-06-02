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
    
    
    public function AddWorker()
    {
                $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $registerModel->setName(trim($_POST['name']));
            $registerModel->setDepartment(trim($_POST['department']));
            $registerModel->setNumber(trim($_POST['number']));
            $registerModel->Add();
                    redirect('pages/info');

        }
        $viewPath = VIEWS_PATH . 'pages/AddWorker.php';
        require_once $viewPath;
        $AddWorkerView = new AddWorker($this->getModel(), $this);
        $AddWorkerView->output();
    }

    public function EditWorker($id)
    {


      $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $registerModel->setName(trim($_POST['name']));
            $registerModel->setDepartment(trim($_POST['department']));
            $registerModel->setNumber(trim($_POST['number']));
            $registerModel->Edit();
                    redirect('pages/info');

        }

        $viewPath = VIEWS_PATH . 'pages/EditWorker.php';
        require_once $viewPath;
        $EditWorkerView = new EditWorker($this->getModel(), $this);
        $EditWorkerView->output();
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


}
