<section class="section-404 padding-top padding-bottom">
    <div class="container">
        <?php if(isset($paymnt)){?>
        <h3 class="title">PAYMENT DETAIL SENT TO
            <?= $this->session->tempdata('email'); ?></h3>
        <p>
            የባንክ ቁጥራችንን እና ክፍያዎን የሚያረጋግጡበት ሊንክ ኢሜል ላይ ተልኳል ፣
            ክፍያውን በመረጡት ባንክ በኩል ከፈፀሙ በኋላ መልዕክቱ ላይ ያለውን ሊንክ በመጠቀም የደረሰኝ ቁጥሮን ያስገቡ፣</p>
            <?php }elseif(isset($ticket)){?>
                <h3 class="title">TICKET DETAIL SENT TO YOUR EMAIL</h3>
        <p>
            </p>
            <?php } ?>
        <a href="<?php echo base_url();?>home" class="custom-button">Back To Home <i class="flaticon-right"></i></a>
    </div>
</section>