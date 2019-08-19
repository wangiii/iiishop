<?php

return [
    'alipay' => [
        'app_id'         => '2016092500589694',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvoJmpafLsHj/q8Rc+iDT0uQVII4daFS1M8PW2GySpmoCLd66lWubuN7g+iYrhxxRDiee2xgsOGKWxSVZ+6+LJJQxg4d9IG07wdG8gZK7pdVGzGWY/Lwv/vAuTlhhmqKFxpbHfdJusAf0+3gBjA7SiAqY/qSd6rz2itOT9l4Rt+2TIMqwSY0prxElZfrgkYFkHqTRc2IT2rH9fU1MM72g1AtGxbHeWKoXjCh7pu6k7+D+NatkFLdNB2FuHCfo2GOPmxIFlFo25fEZ8DuKd7WwxowNRCmVszOQK6RPmmR6ARSq0b3gSkHSL4APS17hlmKG0bn8h0k1RGUXtKpqvdlO3QIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAhsQyWJMtVq3Y9m3KUzoJS5Zb88pjI3ZUE6igyYTrccy0ScVONl7vsSQtSmun70+EL6W1lp2Z7ug9Cu5ON2ozPm4UIKE4g38Vg6wHz1ago/KPQnJzuHJYxIQbOjOe6t4B6PdghSDZ8EYe1J/MphDV03Ly3Yqi+qpsHm2hFYSRRJcoQ+zHyw0H9tfmcLiekTfRggRlSLqD3c+uhtix4wY5g2lJU2TXFxJvRVXnZ/7hknoqpJ9GGD2xOuKkDHvdBwCtfsf6SaO2JaGFGSPN/VwPtmZNDpUbiT8vxWvdX214G6MJ6wbDP9MRKIF+QhNoYQidD3E+xErnNraoWndJru8v4wIDAQABAoIBAEzEbjlufSEnHrQhjmMiaDEakX6qBxcoTHR2VkD06nmEth5fulHWeotZpEMEWEFF9nJ93pbRZ+JjgII9hWijolUpt2Vu8RZWyhabZEeDfTZm8ZxUPf8Pg+lNp4Tb6ua3WDcw01aChCMOjnloHddrN6KflCEG3BgWBEjBAkWTonyDGtues5nV/JNnO8MRMwRrCRUSP78I+7T2AX3j6nsg65UUvGazy70hR/zFN4Ql3kWTdKm3mdcv2NQjnB4Zwk0Y9Fno22bDJ9q3o/wDkKgOjhXT7sHXwMeTaWzmbRdaTWwfQw5wHnpsvD+nCqWqkuamRyIPhb6wkcnyHmY7fiaf8QECgYEAuj2dbVIlJZ3LYUpcnkf+kqF8m1FpuM60N/Bb1LhhDRBZ4nPQGKBwi1YPPMSKM4HlwngLQAPqdj2kJ+giMqA/AkO2RQP9/j57zOicGYIf5Y0ccl2ZPL/R/N1Zy/KxdVT3vRuSR95MkBlr+i0D2JMw0UyTFDQQIyZJNGuV225W+wMCgYEAuT7G14UZ3ygPoBjpjP0QqsG7S8gFpRVLa7LzMUWq3EJX1Uf5/0XpFv6SzxxGAXRUQuOrLWTt0sHNHejlxeTF4hH4rvA92iZLK3NvEZRyvBx+E3xbVaTHhHrY3SG/BdTfegew9TSg7YpGaDWAZywqQ65ODYAVyZ14jzkekYolcaECgYEAodMB5EiZMGtAmePUQFAMOnqI3ChMdaFd5LE8CcS/x2sqvuKksZFO2TNJACNCdmjrLCPEmrYMVvtOlMJWXKjyttQBH0zNuMmwJqcDZAK2Fm6bhiAgEzIVkuL+sIDLg0j2DmJTo5Db8+Wy9emBSwDyTRp9PfPTBcexmhPVXZoth+MCgYBJv4dUCAZbxEwsNZ7NZXZ8NLKHIfO1XDvxfYW6KP0zwSnMnGIX0dJRODpkP+JS8+gT1SWx5cuUq1kovi6z0TdCoFr78mL9dV9ZxhQC0LG42DMNOOX3u6k+wdWSe7vb63qoz2UQycoDp5gOJrae3INa/IrQbxy9bnavtlLIKFJt4QKBgFQfRa9rFJV63S5X/CMChwrCBZQVcPGXdJpcqkhpB4O0rltV/nz1pGzIGwDe/oO8XIK69vyVXJlbFjvSosYq4es3gzhSQpEQ8tRJJ2sp43Jhlrb6V83Iju81nO9skmlBuqUmpu/ABFams9IX6wbRHQJmF+TcOJaP41vgdo86xXc7',
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
