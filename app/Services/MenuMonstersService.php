<?php

declare(strict_types=1);

namespace App\Services;

class MenuMonstersService
{
    public function prepareDataForMenu(array $data, ?int $stepLvl, ?int $maxLvl): array
    {
        $convertedData = [];
        foreach ($data as $key => $group) {
            $convertedData[$key] = $this->lvlDeclare($stepLvl, $maxLvl, $group);
        }
        return $convertedData;
    }

    private function lvlDeclare(int $stepLvl, int $maxLvl, array $group): array
    {
        $data = [];
        $start = 1;
        $end = 5;
        for ($i = 1, $j = 5; $i <= $maxLvl; $i += $stepLvl, $j += $stepLvl) {
            $data["$i-$j"][$i] = [];
            $data["$i-$j"][$i + 1] = [];
            $data["$i-$j"][$i + 2] = [];
            $data["$i-$j"][$i + 3] = [];
            $data["$i-$j"][$i + 4] = [];
        }
        foreach ($group as $value) {
            if ($value['lvl'] > $end) {
                $start += $stepLvl;
                $end += $stepLvl;
            }
            if ($value['lvl'] >= $start && $value['lvl'] <= $end) {
                $data["$start-$end"][$value['lvl']][$value['type']] = $value;
            }
        }
        return $data;
    }
}
