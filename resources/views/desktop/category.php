<?php $path_xml_breaking = $_SERVER["DOCUMENT_ROOT"] . '/xml-data/breaking/'; ?>
<?php $this_category = get_category($cat); //deteksi kategori aktif ?>
<?php $this_child = get_terms('category', 'hide_empty=0&child_of='.$this_category->term_id.''); //deteksi kategori turunan ?>
<?php $count = count($this_child); //hitung jumlah kategori turunan  ?>

<?php $datacat = array('664047','94686','83','152076','76212','15783','8467','636','4175','669739'); ?>
<?php if($count > 0) : //punya kategori turunan? ?>
    <?php //if(in_array($this_category->term_id, $datacat)) : ?>
    <?php if($this_category->term_id == '668331'): ?>
        <?php include (TEMPLATEPATH . '/category-hikmah-ramadhan.php'); ?>
    <?php elseif($this_category->term_id == '742278'): ?>
        <?php include (TEMPLATEPATH . '/category-video.php'); ?>      
    <?php elseif($this_category->term_id == '670832'): ?>
        <?php include (TEMPLATEPATH . '/category-cekfakta.php'); ?>
    <?php else: ?>
        <?php include (TEMPLATEPATH . '/category-section.php'); ?>
    <?php endif; ?>
    <?php //else: ?>
        <?php //include (TEMPLATEPATH . '/archive.php'); ?>
    <?php //endif; ?>
<?php else: // tidak punya kategori turunan ?>
    <?php if(in_array($this_category->term_id, $datacat)) : ?>
        <?php include (TEMPLATEPATH . '/category-section.php'); ?>
    <?php else: ?>
        <?php if(has_category( array('artikel', 'thr', 'quote-ramadhan', 'jadwal-imsakiyah', 'video-ramadhan'))): ?>
            <?php include (TEMPLATEPATH . '/archive-hikmah-ramadhan.php'); ?>
        <?php else: ?>
            <?php include (TEMPLATEPATH . '/archive.php'); ?>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>