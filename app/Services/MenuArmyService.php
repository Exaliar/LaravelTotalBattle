<?php

declare(strict_types=1);

namespace App\Services;

class MenuArmyService
{
    public function prepareDataForMenu(array $data): array
    {
        $convertedData = [];
        foreach ($data as $key => $group) {
            // $key = str_replace('_', ' ', $key);
            $convertedData[$key] = $this->lvlDeclare($group);
        }
        return $convertedData;
    }

    private function lvlDeclare(array $group): array
    {
        $data = [];
        foreach ($group as $value) {
            $data[$value['name']][$value['lvl']] = $value['id'];
        }
        return $data;
    }
}
