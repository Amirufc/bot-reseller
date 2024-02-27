<?php

namespace app\Enum;

enum UserGroup: int {
    case User = 0;
    case Reseller = 1;
    public function getLabel(): string {
        return match ($this) {
            UserGroup::User => 'مشتری',
            UserGroup::Reseller => 'نماینده',
            default => 'نا شناخته',
        };
    }
    public static function toArray(): array {
        return [
            self::User->value => ['value' => self::User->value, 'label' => self::User->getLabel()],
            self::Reseller->value => ['value' => self::Reseller->value, 'label' => self::Reseller->getLabel()],
        ];
    }
}