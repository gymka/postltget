<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="lt" version="XHTML+RDFa 1.0" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
Perradresuoju siuntą savo namų adresu, palaukite...
<form id="shipment-tracking-search-form" action="https://post.lt/lt/pagalba/siuntu-paieska" method="post">
<input type="hidden" value="neijustenskaitotneika.text" name="form_build_id">
<input type="hidden" value="shipment_tracking_search_form" name="form_id">
<input type="hidden" name="parcel_numbers" value="<?php echo htmlspecialchars($_GET["numeris"]); ?>">
<script type="text/javascript">
 document.forms["shipment-tracking-search-form"].submit();
</script>
</form>
</html>