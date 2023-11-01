<?php

namespace Yannisme\OXOTheme;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        
        ->css(__DIR__.'/less/forum.less'),
    
    
];

namespace Blomstra\UsercardStats;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),

    new Extend\Locales(__DIR__.'/locale'),
];