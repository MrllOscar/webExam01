<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
          <p class="t cent botli">最新消息資料管理</p>
          <form method="post" action="../api/manage.php">
            <table width="100%">
              <tbody>
                <tr class="yel">
                  <td width="45%">最新消息資料</td>
                  <td width="7%">顯示</td>
                  <td width="7%">刪除</td>
                </tr>
                <?php 
                                $big=$News->count();
                                $small=3;
                                $page=ceil($big/$small);
                                $now=$_GET['p']??'1';
                                $start=($now-1)*$small;
                                $rows=$News->all(" LIMIT $start,$small");
                foreach($rows as $row){
                  // 尺寸注意
                  printf('<tr><td width="80%%"><textarea name="text[]" style="width:90%%;height:2rem">%s</textarea></td>',$row['text']);
                  printf('<td><input type="checkbox" name="sh[]" value="%s" %s></td>',$row['id'],$row['sh']==1?'checked':'');
                  printf('<td><input type="checkbox" name="del[]" value="%s"><input type="hidden" name="id[]" value="%s"></td></tr>',$row['id'],$row['id']);
                }
                ?>
              </tbody>
            </table>
            <input type="hidden" name="table" value="news">
            <div class="cent">
            <?php 
                if($now-1>0)printf('<a href="?do=news&p=%s"><</a>',$now-1);
                for($i=1;$i<=$page;$i++)printf('<a href="?do=news&p=%s" %s>%s</a>',$i,($now==$i)?'style="font-size:32px;"':'',$i);
                if($now+1<= $page)printf('<a href="?do=news&p=%s">></a>',$now+1);
                ?>
                </div>
            <table style="margin-top:40px; width:70%;">
              <tbody>
                <tr>
                  <td width="200px"><input type="button" onclick="op('#cover','#cvr','../window/news.php?')" value="新增最新消息資料"></td>
                  <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
              </tbody>
            </table>

          </form>
        </div>