<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Division;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $seedObj = [
            'division'=> [
                [
                    'name'=> '서비스 개발 본부',
                    'department'=> [
                        [
                            'name'=> '기술개발 연구소',
                            'team'=> [
                                [
                                    'name'=> '제조경쟁력강화 TASK',
                                    'user'=> [
                                        'name'=>[
                                            '김성훈',
                                            '서준형'
                                        ]
                                    ],
                                ],
                                [
                                    'name'=> '사물인터넷 TASK',
                                    'user'=> [
                                        'name'=>[
                                            '김제완',
                                            '조다혜'
                                        ]
                                    ],
                                ]
                            ]
                        ],
                        [
                            'name'=> '개발실',
                            'team'=> [
                                [
                                    'name'=> '모바일팀',
                                    'user'=> [
                                        'name'=>[
                                            '조영진',
                                            '장상훈'
                                        ]
                                    ],
                                ],
                                [
                                    'name'=> '글로벌팀',
                                    'user'=> [
                                        'name'=>[
                                            '김영곤',
                                            '성현재'
                                        ]
                                    ],
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'name'=> '서비스 개발 본부 아님',
                    'department'=> [
                        [
                            'name'=> '기술개발 연구소 아님',
                            'team'=> [
                                [
                                    'name'=> '제조경쟁력강화 TASK 아님',
                                    'user'=> [
                                        'name'=>[
                                            '김성훈 아님',
                                            '서준형 아님'
                                        ]
                                    ],
                                ],
                                [
                                    'name'=> '사물인터넷 TASK 아님',
                                    'user'=> [
                                        'name'=>[
                                            '김제완 아님',
                                            '조다혜 아님'
                                        ]
                                    ],
                                ]
                            ]
                        ],
                        [
                            'name'=> '개발실 아님',
                            'team'=> [
                                [
                                    'name'=> '모바일팀 아님',
                                    'user'=> [
                                        'name'=>[
                                            '조영진 아님',
                                            '장상훈 아님'
                                        ]
                                    ],
                                ],
                                [
                                    'name'=> '글로벌팀 아님',
                                    'user'=> [
                                        'name'=>[
                                            '김영곤 아님',
                                            '성현재 아님'
                                        ]
                                    ],
                                ]
                            ]
                        ]
                    ]
                ],
            ]
        ];

        foreach ($seedObj['division'] as $divisions) {
            $division = Division::create([
                'division_name' => $divisions['name']
            ]);
            foreach ($divisions['department'] as $departments) {
                $department = Department::create([
                    'department_name' => $departments['name'],
                    'division_id' => $division->id,
                ]);
                foreach ($departments['team'] as $teams) {
                    $team = Team::create([
                        'team_name' => $teams['name'],
                        'department_id' => $department->id,
                    ]);
                    foreach ($teams['user']['name'] as $userName) {
                        User::create([
                            'name' => $userName,
                            'team_id' => $team->id,
                        ]);
                    }
                }
            }
        }
    }
}
