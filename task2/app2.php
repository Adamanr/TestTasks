<script type="text/javascript" src="/jquery-latest.min.js"></script>

<div data-id="root" style="background: red;">
    root
    <span data-id="id1" style="background: lightblue;">id1</span>
    <div data-id="id2" style="background: green;">
        id2
        <div data-id="id3" style="background: yellow;">id3</div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("[data-id='root'] div,span ").on("click", function(e){
            e.stopPropagation();
            console.log($(this).attr("data-id"))
        });
    });
</script>