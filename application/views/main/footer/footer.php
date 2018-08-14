    <div class="footer">
        <div class="footer_map">
            <div class="map_p">
                <div id="googleMap" style="height:100%;width:100%;"></div>
            </div>
        </div>
        <div class="footer_cont">
        </div>
    </div>
</body>
<script>
    $(document).ready(function(){    
//              script opened and closed MOBILE MENU
        $('.nav_toggle').click(function(){
            $(this).toggleClass('active');
            $(".nav_p_menu").slideToggle("slow");           
        });
            
//            End script opened and closed MOBILE MENU
    });
//            script MAPs
    function myMap() {
    var myCenter = new google.maps.LatLng(41.878114, -87.629798);
    var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
    }
//        end MAP
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

</html>
 