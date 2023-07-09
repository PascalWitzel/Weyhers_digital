<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/weyhers/grav-admin/user/pages/blog/blog.md',
    'modified' => 1687197152,
    'size' => 194,
    'data' => [
        'header' => [
            'title' => 'Blog',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'visible' => false
        ],
        'frontmatter' => 'title: Blog
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
visible: false',
        'markdown' => ''
    ]
];
