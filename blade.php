<?php

return [
    'gravatar' => function ($expression) {
        list($email, $size) = explode(', ', $expression);
        
        return '<?php echo "https://www.gravatar.com/avatar/".md5(strtolower(trim('.$email.')))."?&s='.$size.'"; ?>';
    }
];