<script type="text/javascript" src="/jquery-latest.min.js"></script>

<div id="root" style="background: red;">
    root
    <span id="id1" style="background: lightblue;">id1</span>
    <div id="id2" style="background: green;">
        id2
        <div id="id3" style="background: yellow;">id3</div>
    </div>
</div>
<script>
    $('#root').on('click', function (event) {
        console.log($(event.target).attr('id'));
    })
</script>