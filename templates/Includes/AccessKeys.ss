<% cached 'accessKeys', Aggregate(Page).Max(LastEdited) %>
<div id="accesskeys">
<h3>Access Keys</h3>
<ul>
<% if PagesWithAccessKeys %>
<% control PagesWithAccessKeys %>
<li><a href="$Link" accesskey="$AccessKey">$Title</a></li>
<% end_control %>
<% end_if %>
<% if SiteConfig.SkipToMainContentAccessKey %><li><a href="#content" accesskey="$SiteConfig.SkipToMainContentAccessKey"><% _t('AccessKey.SKIP_TO_CONTENT', 'Next') %></a></li><% end_if %>
</ul>
</div>
<% end_cached %>