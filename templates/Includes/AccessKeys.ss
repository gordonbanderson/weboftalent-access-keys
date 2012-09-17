<% cached 'accessKeys', Aggregate(Page).Max(LastEdited) %>
<div id="accesskeys">
<h3>Access Keys</h3>
<% control PagesWithAccessKeys %>
<a href="$Link" accesskey="$AccessKey">$Title</a>
<% end_control %>
<a href="#content" accesskey="[">Skip to Content</a> 
<a href="#topLevelNavigation" accesskey="n">Skip to Top Level Navigation</a> 
<a href="#sectionNavigation" accesskey="m">Skip to Section Navigation</a> 
</div>
<% end_cached %>