<?php

return [
    'alipay' => [
        'app_id'         => '2016101100660478',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0OfGYZXUGZaL/7gdSSLIflhNE8Jtg4s0uTmblt/y+QxNDafOfmtCWxTFo+uzXi56Pzs91b+RVGtBH96I0Tfmzy02WtOrEk+6RFe9h3/yQEhKHRuDQTFe8jWrHNZ0+RxgLZqiUWEs2ZpA8yEkRfUnVRItzJOalX0DbrhN0ju7iHBwIDcmDmcU6wDKShN+W0HC8tvA9UL+Kf6u8M+A7CeBrR1QLSNH8yXV5KLr3tjqJfwMBSBj+eq/WCYDs6qfYGtWTSYNiq4rXJ+xyZti/bjZo0/EdWv/LhQxrAO/Lv4cgV4j5Z2aTdo2NUNK40p7aG0rpvGdYgkc1fT6sWiYlcMI+QIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAwXZh6IHMI54nj+MFttvzw7Id9Avl1PG9mjYFbIfiHAHQRqqAEy/HqerRqNdTvA05Uyfoqd9m41zjIzUh6Ssnh5QqkRooeruhbd2fWdjxIuH25in2AVfPdXG/3cRZnBeto+PWrWFQ5fE8gfwocXOjvZKhrWvG8uJecP0smAfcfFDUHmP71Hnwfuc3KO8M8nnPRkWmaz3xluw2WGg7fAmoeD1AlHZ/FjNz8P5enh/XTfIO9kpCHMg+nzyDiqeEWmew5UFkIkCnjATfY4k6gf+AKOiEXdvM3lYMt/7IdJc0AXFNrREGcUngv4GEYqi2ycwvujRlpoA91khb4Px7BEZ4PwIDAQABAoIBAQCWtA1Y/aN0K4NOBt8wru6ZB2tl7M7Arv+v3V0kSkXM42zHX5IdYB79MjrYd8R2vSZmrLQFgE2512Xoyz77T+6fIsB2ABaAZSE/YGD9sI1HSxb1/MHyEeE977oymv3jJl7RSG626RQHy4ADEda/agGnb04atdZo5gYDpnTSiW0sOMAJEwTGfKJ68GRtRUmqS3VBxukHJKSWbbAI1gAh9nuPYvoZy4LrpJnJbQZJYswtCGaI5/2sIWrF/qkDWzNYIW0wSzHnHohrPtXaPNfVVL4yeC94Qtz+MKPbA+vjj5Nsw62hPeq5konR23z5orwJHzESdqRqPX3VsuU8dyYuLj/hAoGBAOA5qlX934tTyYRadvlXoUHECkzoAWK4uM4Agcewt1ih0XJYt9NeUHBuwkZ8XzPEWKBuhhY/bKiddUq+yBgYFSAl3NzDmo/N5j+sRQOumAtjtmyC8d6/tjrl5rGQOH1xHAoZC0qf1JjHPDoN9h0wAb14tVsltUgfzGm9kXtyCy/1AoGBANzgt+S7ia6aUrcCprydkXMQ7GhOHVll5tV8ecsbVvpNDSUAFZQS/hW2Eg3ewN8mkfjsgT639EXWkO4M3Aojh5eUKnMuBqyapAtIDS9LDA3lmPDXEi4jsNatKyFDv5QFsmGUkPTOM9CfcobmewLOOerlc50VF4pyYjeAhnHGUerjAoGAUSatrlemmz9k1KEFJDMB6tJvw+vH7JncULpAPiyH/uz557+SME6XIEoFyArlTdAHH3FA2DZ2NgRe2gF4W7gDlVH+wGuOufMUHQFVLQL4hk69TEKMFUkfQ+vG9Yaz2zqfokv0GTsFb5HUC1LYOzIPvyo7wNRB6uuPSMnSKHJa+C0CgYAKcO0AeQUHJfBnCk8Ld39aqyAhxh+JDFIfIWU4frBb4KyQZTKf703nhNXRpggEBHS+CaAKcPOxIXV0a1Mzf353Yd+n1jMmkaDTj7Jf2/JT7diO+fu4BqPjYgg56FP0EVjfWACKMf0tDXyCd/60oT8HpZUThd25A7M04HR6iF9y9QKBgQDYiEq3tdAFlAHWxN88kHj61r/u7gcD+B3MXNkEtT5cuAzAJrcitqeLaiUOWYPEONBW8M4MaUbiZz6JykUOS91nM/1kiSIj5bKS0RVZp3Fiv3XHwxCmY7egT8ncq9mvNn7hU4elTZTLzewm0CEOUOif1fK96fBjiaFdzUjvVWBaMg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
