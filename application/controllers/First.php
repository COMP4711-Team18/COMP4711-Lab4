<?php

class First extends Application {
  public function gimme($id) {
    $this->data['pagebody'] = 'justone';

    $record = $this->quotes->get($id);
    $this->data = array_merge($this->data, $record);

    $this->render();
  }
    
  public function index() {
    $this->data['pagebody'] = 'justone';

    $record = $this->quotes->get(1);
    $this->data = array_merge($this->data, $record);

    $this->render();
  }
}
