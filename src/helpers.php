<?php

if (!function_exists('readableMemory')) {
    /**
     * Converting bytes to human readable values (KB, MB, GB, TB, PB, EB, ZB, YB)
     *
     * @param float $bytes
     * @return array
     */
    function readableMemory(float $bytes): array
    {
        $i = floor(log($bytes) / log(1024));
        $sizes = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];

        return [
            'memory' => sprintf('%.02F', $bytes / pow(1024, $i)) * 1,
            'unit' => $sizes[$i],
        ];
    }
}
