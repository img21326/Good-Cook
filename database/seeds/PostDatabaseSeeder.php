<?php

use Illuminate\Database\Seeder;

class PostDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $posts = array(
            array('id' => '2','owner_id' => '2','category_id' => '5','title' => '客家菜包','logo_pic' => 'https://i.imgur.com/lIEyZ4A.jpg','description' => '以前客家主要務農，為了祈求自己所生活的土地安全富足，拜土地公是件必要的事，而菜包製作便是用來祭拜土地公時製作。 
        我們這次向客家媽媽學習傳統的客家菜包，Ｑ軟的皮配上鹹香的內陷，懷念的古早味滋味怎麼可以錯過呢～大家一快跟著我們動手做做看！','steps' => '[{"description":"\\u767d\\u863f\\u8514\\u5228\\u7d72\\u3001\\u4e26\\u4e14\\u5c07\\u8766\\u7c73\\u6ce1\\u6c34","pic":"https:\\/\\/i.imgur.com\\/8HNXpRO.jpg"},{"description":"\\u5c07\\u6c34\\u52a0\\u5165\\u9069\\u91cf\\u9e7d\\u5df4\\u5f8c\\uff0c\\u716e\\u6efe\\u3002\\u716e\\u6efe\\u5f8c\\u4e1f\\u5165\\u767d\\u863f\\u8514\\uff0c\\u6ce8\\u610f\\u71d9\\u8edf\\u863f\\u8514\\u5373\\u53ef\\uff0c\\u4e0d\\u53ef\\u71d9\\u721b\\uff01\\r\\n\\u716e\\u8edf\\u5f8c\\u5c07\\u863f\\u8514\\u7684\\u6c34\\u701d\\u4e7e\\uff08\\u53ef\\u4ee5\\u58d3\\u77f3\\u982d\\u52a0\\u5feb\\u701d\\u4e7e\\u7684\\u901f\\u5ea6\\uff09\\r\\n\\uff08\\u701d\\u4e7e\\u793a\\u610f\\u5716\\uff09","pic":"https:\\/\\/i.imgur.com\\/aL0FmUu.jpg"},{"description":"\\u7cef\\u7c73\\uff08\\u7c84\\u6bcd\\uff09\\u6210\\u584a\\u716e\\u81f3\\u878d\\u5165\\u71b1\\u6c34","pic":"https:\\/\\/i.imgur.com\\/O2g8ep4.jpg"},{"description":"\\u7528\\u8c6c\\u6cb9\\u7206\\u9999\\u9999\\u83c7\\u3001\\u63a5\\u8457\\u7092\\u8766\\u7c73\\u4e26\\u7092\\u81f3\\u91d1\\u9ec3\\u8272\\uff0c\\u53d6\\u51fa\\u9019\\u4e9b\\u6599\\u653e\\u4e00\\u65c1","pic":"https:\\/\\/i.imgur.com\\/V1h6grM.jpg"}]','ingredients' => '[{"ingredient_id":11,"amount":"20"},{"ingredient_id":12,"amount":"20"},{"ingredient_id":13,"amount":"87"},{"ingredient_id":14,"amount":"5"}]','created_at' => '2018-01-02 15:47:07','updated_at' => '2018-01-02 15:47:07'),
            array('id' => '3','owner_id' => '2','category_id' => '4','title' => '韓式醃黃蘿蔔條','logo_pic' => 'https://i.imgur.com/1OYlKTC.jpg','description' => '顏色鮮黃的蘿蔔條，看起來悅目，吃起來清脆，做法更是親民簡單，看看做法吧！','steps' => '[{"description":"\\u863f\\u8514\\u6d17\\u6de8\\u53bb\\u76ae\\u3001\\u5207\\u689d","pic":"https:\\/\\/i.imgur.com\\/8YdxySh.jpg"},{"description":"\\u6240\\u6709\\u98df\\u6750\\u653e\\u5165\\u6e6f\\u934b\\u4e2d\\u51b7\\u6c34\\u716e\\u81f3\\u6efe\\u5373\\u53ef\\u7184\\u706b","pic":"https:\\/\\/i.imgur.com\\/wVm4fWu.jpg"},{"description":"\\u5f85\\u6dbc\\u79fb\\u81f3\\u4fdd\\u9bae\\u76d2\\uff0c\\u52a0\\u84cb\\u51b7\\u85cf\\u3127\\u665a\\u5373\\u5165\\u5473","pic":"https:\\/\\/i.imgur.com\\/9hKZRc5.jpg"}]','ingredients' => '[{"ingredient_id":11,"amount":"50"},{"ingredient_id":17,"amount":"30"},{"ingredient_id":18,"amount":"2"},{"ingredient_id":19,"amount":"60"}]','created_at' => '2018-01-02 15:51:18','updated_at' => '2018-01-02 15:51:18'),
            array('id' => '4','owner_id' => '3','category_id' => '1','title' => '蕃茄蛋炒飯','logo_pic' => 'https://i.imgur.com/qHOa7HI.jpg','description' => '簡單又快速的蛋炒飯','steps' => '[{"description":"\\u6d0b\\u8525\\u3001\\u756a\\u8304\\u5207\\u4e01\\u5099\\u7528","pic":"https:\\/\\/i.imgur.com\\/rBUUtVn.jpg"},{"description":"\\u52a0\\u5165\\u5c11\\u8a31\\u6cb9\\u5f8c\\u52a0\\u5165\\u96de\\u86cb\\uff0c\\u714e\\u81f3\\u534a\\u719f","pic":"https:\\/\\/i.imgur.com\\/SyCql4j.jpg"},{"description":"\\u6d0b\\u8525\\u3001\\u756a\\u8304\\u7092\\u719f","pic":"https:\\/\\/i.imgur.com\\/Benipeu.jpg"},{"description":"\\u52a0\\u5165\\u767d\\u98ef\\u3001\\u756a\\u8304\\u91ac\\u3001\\u86cb\\u4e00\\u8d77\\u62cc\\u7092\\u5373\\u53ef","pic":"https:\\/\\/i.imgur.com\\/Gz3RhA0.jpg"}]','ingredients' => '[{"ingredient_id":15,"amount":"1"},{"ingredient_id":5,"amount":"1"},{"ingredient_id":10,"amount":"10"},{"ingredient_id":9,"amount":"500"},{"ingredient_id":8,"amount":"1"}]','created_at' => '2018-01-02 15:52:38','updated_at' => '2018-01-02 15:52:38'),
            array('id' => '5','owner_id' => '2','category_id' => '4','title' => '韓式拌冬粉','logo_pic' => 'https://i.imgur.com/gQ9w85y.jpg','description' => '分開炒好的食材保留了各別食物的原味，最後再拌在一起完成了Q彈口感的韓國冬粉，熱熱吃涼拌吃都很美味！','steps' => '[{"description":"\\u6750\\u6599\\u6e96\\u5099\\uff1a\\r\\n\\u83e0\\u83dc\\u6d17\\u6de8\\u5207\\u6bb5\\uff0c\\u6d0b\\u8525\\u3001\\u7d05\\u863f\\u8514\\u3001\\u9ed1\\u6728\\u8033\\u5207\\u7d72\\uff0c\\u725b\\u8089\\u7d72\\u7528\\u9183\\u6599\\u9183\\u597d\\u5099\\u7528\\u3002","pic":"https:\\/\\/i.imgur.com\\/DhzC5EO.jpg"},{"description":"1.\\u716e\\u4e00\\u934b\\u6c34\\uff0c\\u6c34\\u6efe\\u5f8c\\u653e\\u5165\\u97d3\\u570b\\u51ac\\u7c89\\u71dc\\u716e6-7\\u5206\\u9418\\uff0c\\u6642\\u9593\\u4e00\\u5230\\u53d6\\u51fa\\u7528\\u51b7\\u958b\\u6c34\\u6c96\\u6dbc\\u5f8c\\u701d\\u4e7e\\u5099\\u7528\\u3002\\r\\n2.\\u83e0\\u83dc\\u5ddd\\u71d9\\u5f8c\\u53d6\\u51fa\\uff0c\\u5c07\\u6c34\\u701d\\u4e7e\\u653e\\u6dbc\\u5099\\u7528\\u3002\\r\\n3.\\u8d77\\u6cb9\\u934b\\uff0c\\u5c07\\u6bcf\\u6a23\\u98df\\u6750\\u5206\\u5225\\u7092\\u597d\\u3002","pic":"https:\\/\\/i.imgur.com\\/bYxjLCg.jpg"},{"description":"\\u628a\\u7092\\u597d\\u7684\\u852c\\u83dc\\u7d72\\u3001\\u725b\\u8089\\u7d72\\u3001\\u83e0\\u83dc\\u3001\\u51ac\\u7c89\\u8ddf\\u8abf\\u5473\\u6599\\u62cc\\u52fb\\u3002","pic":"https:\\/\\/i.imgur.com\\/w0sG0vc.jpg"}]','ingredients' => '[{"ingredient_id":20,"amount":"300"},{"ingredient_id":21,"amount":"60"},{"ingredient_id":22,"amount":"50"}]','created_at' => '2018-01-02 15:53:24','updated_at' => '2018-01-02 15:53:24'),
            array('id' => '6','owner_id' => '2','category_id' => '3','title' => '義式茄汁肉丸','logo_pic' => 'https://i.imgur.com/MtyZDNx.jpg','description' => '酸甜的茄汁與外酥裡香的丸子 不僅適合搭配也很適合配飯     
        做法也很簡單','steps' => '[{"description":"\\u6d0b\\u8525\\u5207\\u4e01\\uff0c\\u849c\\u982d\\u5207\\u672b\\u3002\\r\\n\\r\\n\\u4e00\\u8d77\\u4e0b\\u934b\\u7092\\u81f3\\u91d1\\u9ec3\\u3002","pic":"https:\\/\\/i.imgur.com\\/Ov01OVE.jpg"},{"description":"\\u5c07\\u8abf\\u5473\\u6599\\u6599\\u8207\\u7092\\u904e\\u7684\\u6d0b\\u8525\\u849c\\u982d\\uff0c\\u6df7\\u5408\\u5747\\u52fb\\u81f3\\u6709\\u9ecf\\u6027\\u3002","pic":"https:\\/\\/i.imgur.com\\/0qTuXbL.jpg"},{"description":"\\u505a\\u6210\\u4e38\\u5b50\\u72c0\\uff0c\\u62ff\\u53bb\\u51b7\\u51cd\\u51b05\\u5206\\u9418\\u5b9a\\u578b\\u3002","pic":"https:\\/\\/i.imgur.com\\/sMZhaNF.jpg"}]','ingredients' => '[{"ingredient_id":13,"amount":"0.5"},{"ingredient_id":5,"amount":"1"},{"ingredient_id":23,"amount":"30"}]','created_at' => '2018-01-02 15:55:53','updated_at' => '2018-01-02 15:55:53'),
            array('id' => '7','owner_id' => '2','category_id' => '3','title' => '義式奶凍Panna Cotta','logo_pic' => 'https://i.imgur.com/rJIQqLo.jpg','description' => '個經典的義式奶凍Panna Cotta, 就是煮過的鮮奶油的意思。傳統的做法只用鮮奶油，但也可加一半份量的牛奶。 
        最後可加入果醬或水果享用。零難度的甜點，花點心思裝飾，就成高貴的甜點！','steps' => '[{"description":"\\u5c07\\u9bae\\u5976\\u6cb9\\u548c\\u725b\\u5976\\u653e\\u5165\\u5c0f\\u934b\\u5167\\uff0c\\u7528\\u4e2d\\u5c0f\\u706b\\u716e\\u81f3\\u6709\\u6c23\\u6ce1\\uff0c\\u7136\\u5f8c\\u52a0\\u5165\\u7cd6\\uff0c\\u716e\\u81f3\\u7cd6\\u6eb6\\u5316\\uff0c\\u52a0\\u9ede\\u9999\\u8349\\u7cbe","pic":"https:\\/\\/i.imgur.com\\/tYnRoH1.jpg"},{"description":"\\u5c07\\u5409\\u5229\\u4e01\\u7c89\\u820730\\u6beb\\u5347\\u958b\\u6c34\\u62cc\\u52fb\\uff0c\\u7136\\u5f8c\\u653e\\u5728\\u4e00\\u7897\\u71b1\\u6c34\\u5167\\uff0c\\u4ee4\\u5409\\u5229\\u4e01\\u6eb6\\u5316\\u3002\\u5c07\\u5409\\u5229\\u4e01\\u52a0\\u5165\\u9bae\\u5976\\u6cb9\\u5167\\uff0c\\u62cc\\u52fb","pic":"https:\\/\\/i.imgur.com\\/diMgRRA.jpg"},{"description":"\\u5012\\u5165\\u5bb9\\u5668\\u5167\\uff0c\\u5f85\\u6dbc\\u5f8c\\u653e\\u5165\\u51b0\\u7bb1\\u5167\\u6700\\u5c115\\u500b\\u5c0f","pic":"https:\\/\\/i.imgur.com\\/YGCR8Fb.jpg"}]','ingredients' => '[{"ingredient_id":25,"amount":"250"},{"ingredient_id":26,"amount":"250"},{"ingredient_id":28,"amount":"80"}]','created_at' => '2018-01-02 15:58:28','updated_at' => '2018-01-02 15:58:28'),
            array('id' => '8','owner_id' => '3','category_id' => '1','title' => '中式蔥花蛋烘酥餅','logo_pic' => 'https://i.imgur.com/1cA85Ly.jpg','description' => '外殼酥脆口感，中心式烘蛋的軟綿，很方便上桌的一道料理!','steps' => '[{"description":"\\u70e4\\u7bb1\\u9810\\u71b1220\\u5ea6c\\uff0c\\u8525\\u82b1\\u5099\\u7528\\uff0c\\u86cb\\u548c\\u9bae\\u5976\\u62cc\\u52fb\\uff0c\\u518d\\u52a0\\u5165\\u9eb5\\u7c89","pic":"https:\\/\\/i.imgur.com\\/T8okFjU.jpg"},{"description":"\\u653e\\u9032\\u9810\\u71b1\\u597d\\u7684\\u70e4\\u7bb1","pic":"https:\\/\\/i.imgur.com\\/Pt9Tetl.jpg"},{"description":"\\u70e415\\u5206\\u9418\\u5c31\\u53ef\\u4ee5\\u51fa\\u7210\\u4e86","pic":"https:\\/\\/i.imgur.com\\/WK1d3WF.jpg"}]','ingredients' => '[{"ingredient_id":14,"amount":"1"},{"ingredient_id":8,"amount":"1"},{"ingredient_id":24,"amount":"30"},{"ingredient_id":27,"amount":"60"},{"ingredient_id":10,"amount":"1"}]','created_at' => '2018-01-02 16:00:53','updated_at' => '2018-01-02 16:00:53'),
            array('id' => '9','owner_id' => '3','category_id' => '2','title' => '西式蘑菇濃湯','logo_pic' => 'https://i.imgur.com/tJvaL2B.jpg','description' => '適合冬天來一杯的暖呼呼蘑菇濃湯!','steps' => '[{"description":"\\u934b\\u4e2d\\u653e\\u5165\\u5976\\u6cb9\\uff0c\\u52a0\\u5165\\u6d0b\\u8525\\u4e01\\u7092\\u9999","pic":"https:\\/\\/i.imgur.com\\/40rbjrR.jpg"},{"description":"\\u52a0\\u5165\\u8611\\u83c7\\u4e01\\u62cc\\u7092\\u5747\\u52fb","pic":"https:\\/\\/i.imgur.com\\/Ugjz0Q9.jpg"},{"description":"\\u518d\\u52a0\\u5165\\u9eb5\\u7c89\\u7092\\u52fb","pic":"https:\\/\\/i.imgur.com\\/qcRv1me.jpg"},{"description":"\\u52a0\\u6c34\\u5c0f\\u706b\\u52a0\\u71b1\\uff0c\\u6301\\u7e8c\\u652a\\u62cc\\u81f3\\u6fc3\\u7a20\\uff0c\\u518d\\u52a0\\u9e7d\\u8abf\\u5473","pic":"https:\\/\\/i.imgur.com\\/hOEWeVs.jpg"}]','ingredients' => '[{"ingredient_id":29,"amount":"30"},{"ingredient_id":5,"amount":"1"},{"ingredient_id":30,"amount":"8"},{"ingredient_id":24,"amount":"60"},{"ingredient_id":10,"amount":"5"}]','created_at' => '2018-01-02 16:08:03','updated_at' => '2018-01-02 16:08:03'),
            array('id' => '10','owner_id' => '3','category_id' => '2','title' => '西式炒蛋','logo_pic' => 'https://i.imgur.com/80WC1Ua.jpg','description' => '早午餐常見，滑嫩的西式炒蛋','steps' => '[{"description":"\\u5c07\\u86cb\\u6253\\u6563\\uff0c\\u52a0\\u5165\\u767d\\u80e1\\u6912\\u7c89\\u3001\\u9bae\\u5976\\u3001\\u9e7d\\u4e26\\u62cc\\u52fb","pic":"https:\\/\\/i.imgur.com\\/6fbeJwE.jpg"},{"description":"\\u52a0\\u5165\\u6a44\\u6b16\\u6cb9\\u7a0d\\u5fae\\u71b1\\u934b\\uff0c\\u958b\\u5c0f\\u706b\\u5012\\u5165\\u86cb\\u6db2\\uff0c\\u62cc\\u7092\\u81f3\\u516b\\u5206\\u719f\\uff0c\\u95dc\\u706b\\u76db\\u76e4","pic":"https:\\/\\/i.imgur.com\\/snhy4I3.jpg"},{"description":"\\u6492\\u4e0a\\u9ed1\\u80e1\\u6912\\u7c89\\u5373\\u53ef","pic":"https:\\/\\/i.imgur.com\\/GgYug91.jpg"}]','ingredients' => '[{"ingredient_id":8,"amount":"1"},{"ingredient_id":27,"amount":"20"},{"ingredient_id":31,"amount":"3"},{"ingredient_id":32,"amount":"3"},{"ingredient_id":10,"amount":"2"},{"ingredient_id":33,"amount":"10"}]','created_at' => '2018-01-02 16:18:15','updated_at' => '2018-01-02 16:18:15'),
            array('id' => '12','owner_id' => '2','category_id' => '2','title' => 'test title','logo_pic' => 'https://i.imgur.com/VBlcT8D.jpg','description' => 'test','steps' => '[{"description":"abc","pic":"https:\\/\\/i.imgur.com\\/de2NB1N.jpg"},{"description":"def","pic":"https:\\/\\/i.imgur.com\\/nLJxmrf.jpg"}]','ingredients' => '[{"ingredient_id":2,"amount":"1"},{"ingredient_id":34,"amount":"20"}]','created_at' => '2018-01-03 02:21:24','updated_at' => '2018-01-03 02:21:24')
        );

        foreach ($posts as $a)[
            $post = new \App\Post(),
            $post -> owner_id = $a["owner_id"],
            $post -> category_id = $a["category_id"],
            $post -> title = $a["title"],
            $post -> logo_pic = $a["logo_pic"],
            $post -> description = $a["description"],
            $post -> steps = $a["steps"],
            $post -> ingredients = $a["ingredients"],
            $post -> save(),
        ];

    }
}
