<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>BoardGame</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.cm/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/build/assets/app-ab38f7ee') }}">
    </head>
    <x-app-layout>
        <x-slot name="header">
            map
        </x-slot>
        <body>
            <h1>Board Game</h1>
            <h2>エリアの追加</h2>
            <div>
                
                
                
            </div>
            <div id="map" style="height:500px"></div>
             <script >
                 function initMap() {
                    const locate = @json($locates);
                    console.log(locate,'test');
                    // welcome.blade.phpで描画領域を設定するときに、id=mapとしたため、その領域を取得し、mapに格納します。
                    map = document.getElementById("map");
                    // 東京タワーの緯度は35.6585769,経度は139.7454506と事前に調べておいた

                    opt = {
                        zoom: 13, //地図の縮尺を指定
                        center:locate?locate[0]:{lat: 35.6585769, lng: 139.7454506},//センターを東京タワーに指定
                      };
                    // オプションを設定
                    // 地図のインスタンスを作成します。第一引数にはマップを描画する領域、第二引数にはオプションを指定
                    mapObj = new google.maps.Map(map, opt);
                    
                    // 追加
                    for (let i=0; i<locate.length; i++) {
                        let infoWindow = new google.maps.InfoWindow({
                            content: `<div>${locate[i].name}</div>`,
                        });
                        let posts = new google.maps.Marker({
                            // ピンを差す位置を決めます。
                            position: locate[i],
                    	// ピンを差すマップを決めます。
                            map: mapObj,
                    	// ホバーしたときに「tokyotower」と表示されるようにします。
                           // title: ,
                        });
                        posts.addListener('click', ()=>{
                            infoWindow.open(map,posts)
                        });
                    }
                }
             </script>
             <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyDlv0qH9dGsT5mrX08OscaJHPMvsbYL_Nw&callback=initMap" async defer>
	         </script>
        </body>
    </x-app-layout>
</html>