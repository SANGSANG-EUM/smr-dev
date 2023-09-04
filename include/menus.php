<?php
include_once('./_common.php');

$sb_menus = [
  [
    'id' => 'business',
    'name' => '사업안내',
    'link' => '',
    'sb_2menus' => [
      [
        'id' => 'overview',
        'name' => '사업개요',
        'link' => ''
      ],
      [
        'id' => 'system',
        'name' => '사업추진체계',
        'link' => ''
      ]
    ]
  ],
  [
    'id' => '',
    'name' => '사업단 소개',
    'link' => '',
    'sb_2menus' => [
      [
        'id' => '',
        'name' => '인사말',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '설립목적',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '조직도',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => 'CI소개',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '오시는 길',
        'link' => ''
      ]
    ]
  ],
  [
    'id' => 'ismr',
    'name' => 'i-SMR',
    'link' => '',
    'sb_2menus' => [
      [
        'id' => 'smr',
        'name' => 'SMR',
        'link' => ''
      ],
      [
        'id' => 'innovation',
        'name' => 'Innovation',
        'link' => ''
      ],
      [
        'id' => 'safety',
        'name' => 'Safety',
        'link' => ''
      ],
      [
        'id' => 'decarbonization',
        'name' => 'Decarbonization',
        'link' => ''
      ]
    ]
  ],
  [
    'id' => '',
    'name' => '커뮤니티',
    'link' => '',
    'sb_2menus' => [
      [
        'id' => '',
        'name' => '공지사항',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => 'FAQ',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '자료실',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => '문의하기',
        'link' => ''
      ]
    ]
  ],
  [
    'id' => '',
    'name' => '미디어룸',
    'link' => '',
    'sb_2menus' => [
      [
        'id' => '',
        'name' => '사업단 소식',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => 'i-SMR 보도자료',
        'link' => ''
      ],
      [
        'id' => '',
        'name' => 'SMR 뉴스레터',
        'link' => ''
      ]
    ]
  ]
];

//제품 카테고리 DB 데이터 가져오기 + 메뉴 배열에 할당
/* 필요시 주석 해제
$cate_table = G5_TABLE_PREFIX.'shop_category';
$prd_table = G5_TABLE_PREFIX.'shop_item';
$prd_cate_sql = " select ca_id, ca_1_subj from {$cate_table} ";
$prd_cate_result = sql_query($prd_cate_sql);
$prd_cate = array();
for($i=0; $prd_cate_row=sql_fetch_array($prd_cate_result); $i++){
  $sb_menus[1]['sb_2menus'][] = [
    'id' => $prd_cate_row['ca_id'],
    'name' => $prd_cate_row['ca_1_subj'],
    'link' => '/sub/prod_list/'.$prd_cate_row['ca_id'],
  ];

  $prd_item_sql = " select it_id, it_name from {$prd_table} where ca_id = '{$prd_cate_row['ca_id']}' and it_use=1 ";
  $prd_item_result = sql_query($prd_item_sql);
  $prd_item = array();
  for($k=0; $prd_item_row=sql_fetch_array($prd_item_result); $k++){
    $sb_menus[1]['sb_2menus'][$i]['sb_3menus'][] = [
      'id' => $prd_item_row['it_id'],
      'name' => $prd_item_row['it_name'],
      'link' => '/sub/prod_view/'.$prd_item_row['it_id'],
    ];
  }
}
*/
?>