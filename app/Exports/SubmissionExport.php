<?php
namespace App\Exports;
use App\Submission;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SubmissionExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Submission::with(['birds', 'features'])->get();
    }

    public function map($bird): array
    {
        return [
            $bird->id,
            $bird->name,
            $bird->surname,
            $bird->email,
            $bird->birthday,
            $bird->newsletter,
            $bird->newmember,
            $bird->order,
            $bird->observation_day,
            $bird->observation_time,
            $bird->observation_npa,
            $bird->observation_city,

            join(',', array_map(function($item) {
                return $item['name_fr'] . ' (' . $item['pivot']['quantity'] . ')';
            }, $bird->birds()->getEager()->toArray())),

            join(',', array_map(function($item) {
                return $item['name_fr'];
            }, $bird->features->toArray()))
        ];
    }

    public function headings(): array
    {
        return [
            'id',
            'name',
            'surname',
            'email',
            'birthday',
            'newsletter',
            'newmember',
            'order',
            'observation_day',
            'observation_time',
            'observation_npa',
            'observation_city',
            'birds',
            'features'
        ];
    }
}
