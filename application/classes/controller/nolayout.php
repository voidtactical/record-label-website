<?


Class Controller_Nolayout extends Controller_Lattice {

  public function action_slug($slug){
    $viewModel = latticeview::Factory($slug);
    $this->response->body($viewModel->view()->render());
  }

}
