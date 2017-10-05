
<ion-view view-title="Tramites a Proyecto">
  <ion-content padding="true">
      <?php

      requiere 'simple_html_dom_php';
      $url ='http://www.cucei.udg.mx/carreras/informatica/es/proyectos-modulares-2017'
      $html = file_get_html($url);
      $post = $html->find('div[class=post]');
      foreach ($posts as $post) {
        $link = $post->find('h1 a',0);
        $url = $link->attr['href'];
        $titte = $link->innertext;

        $img= $post->find('div[class=post-body]img',0)->attr['src'];
        echo $titte,"\n",$url,"\n"$img,"\n";
        # code...
      }
  ?>
  </ion-content>
</ion-view>
