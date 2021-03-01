<?php

return [
    'markdown' => function ($text) {
        return '<?php echo \Michelf\Markdown::defaultTransform('.$text.'); ?>';
    },
    'gravatar' => function ($expression) {
        list($email, $size) = explode(', ', $expression);
        
        return '<?php echo "https://www.gravatar.com/avatar/".md5(strtolower(trim('.$email.')))."?&s='.$size.'"; ?>';
    },
];