<% cached 'accesskeyinfopage', List(Page).Max(LastEdited), ID, LastEdited %>
<h1>$Title</h1>
$Content

<h3>Access Keys</h3>

<table class="accessKeysTable table table-striped">
<% if PagesWithAccessKeys %>
<% control PagesWithAccessKeys %>
<tr>
<td>
$Title
</td>
<td>
$AccessKey</td>
</tr>
<% end_control %>
<% end_if %>
<% if SiteConfig.SkipToMainContentAccessKey %>
<tr>
<td>
<% _t('AccessKey.SKIP_TO_CONTENT', 'Skip to Content') %>
</td>
<td>
$SiteConfig.SkipToMainContentAccessKey

</td>
<% end_if %>
</table>
<% end_cached %>