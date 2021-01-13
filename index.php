<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $days = array( "日", "月", "火", "水", "木", "金", "土" );
        $date = 1;
        var_dump( $days );
    ?>
    <table border="1">
        <tr>
            <?php for ( $j = 0; $j < 7; $j++ ) : ?>
                <th><?php echo $days[$j]; ?></th>
            <?php endfor; ?>
        </tr>
        <?php for( $col = 0; $col < 5; $col++ ) : ?>
            <tr>
                <?php for( $row = 0; $row < 7; $row++ ) : ?>
                    <?php if( $date >0 && $date < 32 ) : ?>
                        <td><?php echo $date; ?></td>
                    <?php else : ?>
                        <td></td>
                    <?php endif; ?>
                    <?php $date++; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>