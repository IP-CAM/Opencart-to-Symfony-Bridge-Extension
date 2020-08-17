<?php

declare(strict_types=1);

namespace Sypa\Model;

class CustomFieldDescription {
    private int $custom_field_id;
    private int $language_id;
    private string $name;

    public function __construct(int $custom_field_id, int $language_id, string $name) {
        $this->custom_field_id = $custom_field_id;
        $this->language_id = $language_id;
        $this->name = $name;
    }

    public function getCustomFieldId(): int {
        return $this->custom_field_id;
    }

    public function getLanguageId(): int {
        return $this->language_id;
    }

    public function getName(): string {
        return $this->name;
    }
}
