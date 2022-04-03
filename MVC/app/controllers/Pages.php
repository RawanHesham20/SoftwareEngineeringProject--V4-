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
        public function info()
    {
        $viewPath = VIEWS_PATH . 'pages/info.php';
        require_once $viewPath;
        $infoView = new info($this->getModel(), $this);
        $infoView->output();
    }

}
