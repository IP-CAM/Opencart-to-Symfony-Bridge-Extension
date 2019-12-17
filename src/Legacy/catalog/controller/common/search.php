<?php

namespace OpenCart\Catalog\Controller\Common;

use OpenCart\System\Engine\Controller;

class ControllerCommonSearch extends Controller {
    public function index() {
        $this->load->language('common/search');

        $data['text_search'] = $this->language->get('text_search');

        if (isset($this->request->get['search'])) {
            $data['search'] = $this->request->get['search'];
        } else {
            $data['search'] = '';
        }

        return $this->load->view('common/search', $data);
    }
}
