<?php

declare(strict_types=1);

namespace Sypa\Model;

class CategoryStore {
    private int $category_id;
    private int $store_id;

    public function __construct(int $category_id, int $store_id) {
        $this->category_id = $category_id;
        $this->store_id = $store_id;
    }

    public function getCategoryId(): int {
        return $this->category_id;
    }

    public function getStoreId(): int {
        return $this->store_id;
    }
}
