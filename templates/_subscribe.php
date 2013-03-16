<form id="feed_reader_subscription_form" method="post" action="<?= PluginEngine::getLink($plugin, array(), 'insert') ?>" style="margin: 0;">
  <label>Newsfeed abonieren:
  <input type="text" name="url" />
  </label>
  <input type="submit" value="<?= _("Hinzuf�gen")?>" />
</form>
