<div class="result-content">
    <table class="result-tab" width="100%">
        <tr>
            <th class="tc" width="5%"></th>
            <th>User ID</th>
            <th>Username</th>
            <th>Operation</th>
        </tr>
        <html>
        <?php

        /*return $this->render('select',['username'=>$_POST['keywords'],]);*/
        /*return $this->redirect('index.php?r=manage/select',['username'=>$_POST['keywords'],]);*/
        ?>

        <?php foreach ($users as $country): ?>
            <tr>
                <td class="tc"><input name="id[]" value="" type="checkbox"></td>
                <td>
                    <?= $country->id ?>
                </td>
                <td>
                    <?= $country->username?>
                </td>
                <td>
                    <a class="link-update" href="index.php">Modify</a>
                    <a class="link-del" href="index.php?r=manage/delete&id=<?= $country->id?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </html>
    </table>
    <div class="list-page">
        <?= LinkPager::widget(['pagination' => $pagination]) ?>
    </div>
</div>



<script type="text/javascript">
    function Sub(){
        var content=document.getElementById("t1").value;
        $.ajax({
            type:"POST",
            url:"index.php?r=manage/select",
            async:false,
            data:{content:content},
            //dataType:"json",
            success:function(data) {
                alert(data);
            }
        });

    }
</script>


<div class="result-title">
    <div class="result-list">
        <!--<a href="index.php?r=user/register"><i class="icon-font"></i>新增用户</a>-->
        <!--<a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>删除</a>-->
        <!--<a href="index.php?r=user/register" id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>倒序显示</a>-->
    </div>
</div>