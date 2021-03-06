<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

	<xsl:output method="html" indent="yes" encoding="UTF-8"/>
	<xsl:template match="/*">

		<!-- Variables -->
		<xsl:variable name="css" select="path/css" />
		<xsl:variable name="img" select="path/img" />
		<xsl:variable name="js"  select="path/js"  />
		<xsl:variable name="url">/<xsl:value-of select="//page/acronym" />/</xsl:variable>

		<![CDATA[<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">]]>
		<html>
		<head>
			<meta content="text/html; charset=UTF-8" http-equiv="Content-type" />
			<title><xsl:value-of select="page/title" /></title>

			<link rel="shortcut icon" href="{$img}lynksee2.ico" type="image/x-icon"/>
			<link rel="stylesheet" type="text/css" href="{$css}styles.css?version={@version}" />
			<link rel="stylesheet" type="text/css" href="{$css}summary.css?version={@version}" />
			<script type="text/javascript" src="{$js}utils.js?version={@version}"></script>
        </head>

		<body>
			<table width="790" cellpadding="0" cellspacing="0" border="0" align="center" class="main">
			<tr>
				<td class="header">
					<div class="header">
						<div class="logo"><a href="http://www.lynksee.com"><img src="{$img}lynksee_small.png" alt="Yourpacs" title="Yourpacs" /></a></div>
						<div class="name"><xsl:value-of select="account/@value" /></div>
					</div>
					<div class="line">
						<table width="790" cellpadding="0" cellspacing="0" border="0" align="center">
						<tr>
							<td class="options">
								| <a href="{//account}/blog/"><xsl:value-of select="language/summary/optionblog" /></a>
								| <a href="{//account}/album/"><xsl:value-of select="language/summary/optionalbum" /></a>
								| <a href="{//account}/wiki/"><xsl:value-of select="language/summary/optionwiki" /></a>
								| <a href="{//account}/links/"><xsl:value-of select="language/summary/optionlinks" /></a>
								| <a href="{//account}/forum/"><xsl:value-of select="language/summary/optionforum" /></a>
								|
							</td>
							<td class="optionsright">
								| <a href="http://www.lynksee.com{$url}help/whatis"><xsl:value-of select="language/sections/whatis" /></a>
								| <a href="http://www.lynksee.com{$url}newaccount"><xsl:value-of select="language/sections/register" /></a> |
							</td>
						</tr>
						</table>
					</div>
				</td>
			</tr>
			<tr>
				<td class="content">
					<!-- ********************************************************
					******* START ***** CONTENT ***** START ***** CONTENT *******
					********************************************************* -->
					<div class="bradius">
						<div class="gallery">
							<h1><xsl:value-of select="language/summary/lastphotos" /></h1>
							<xsl:if test="count(fotos/item) = 0"><xsl:value-of select="language/summary/nophotos" /></xsl:if>
							<xsl:for-each select="fotos/item">
								<a href="{//account}/album/main.php?g2_itemId={@parent}"><img src="{//account}/album/main.php?g2_view=core.DownloadItem&amp;amp;g2_itemId={@id}" width="96" border="0" /></a>
								<xsl:text> </xsl:text>
							</xsl:for-each>
							<br/>
						</div>
					</div>

					<br/>

					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td width="50%" valign="top" style="padding-right: 5px;">
							<div class="bradius">
								<div class="wordpress">
									<h1><xsl:value-of select="language/summary/lastblog" /></h1>
									<xsl:if test="count(blog/item) = 0"><xsl:value-of select="language/summary/noentries" /></xsl:if>
									<ul>
										<xsl:for-each select="blog/item">
											<li><span class="date"><xsl:value-of select="@date" /></span><br />
												<a href="{//account}/blog/?p={@id}"><xsl:value-of select="." /></a>
											</li>
										</xsl:for-each>
									</ul>
									<br/>
								</div>
							</div>

							<br/>

							<div class="bradius">
								<div class="mediawiki">
									<h1><xsl:value-of select="language/summary/lastwiki" /></h1>
									<xsl:if test="count(wiki/item) = 0"><xsl:value-of select="language/summary/noentries" /></xsl:if>
									<ul>
										<xsl:for-each select="wiki/item">
											<li><a href="{//account}{@url}"><xsl:value-of select="." /></a></li>
										</xsl:for-each>
									</ul>
									<br/>
								</div>
							</div>
						</td>
						<td valign="top" style="padding-left: 5px;">
							<div class="bradius">
								<div class="sabrosus">
									<h1><xsl:value-of select="language/summary/lastlinks" /></h1>
									<xsl:if test="count(links/item) = 0"><xsl:value-of select="language/summary/nolinks" /></xsl:if>
									<ul>
										<xsl:for-each select="links/item">
											<li><span class="date"><xsl:value-of select="@date" /></span><br />
												<a href="{@link}"><xsl:value-of select="." /></a>
											</li>
										</xsl:for-each>
									</ul>
									<br/>
								</div>
							</div>

							<br/>

							<div class="bradius">
								<div class="phpbb">
									<h1><xsl:value-of select="language/summary/lastforum" /></h1>
									<xsl:if test="count(forum/item) = 0"><xsl:value-of select="language/summary/noforum" /></xsl:if>
									<ul>
										<xsl:for-each select="forum/item">
											<li><span class="date"><xsl:value-of select="@date" /></span><br />
												<a href="{//account}/forum/viewtopic.php?t={@id}"><xsl:value-of select="." /></a>
											</li>
										</xsl:for-each>
									</ul>
									<br/>
								</div>
							</div>
						</td>
					</tr>
					</table>
					<!-- ********************************************************
					********* END ***** CONTENT ***** END ***** CONTENT *********
					********************************************************* -->
				</td>
			</tr>
			<tr>
				<td class="footer">
					<div class="footer">
						<xsl:value-of select="language/footer/copy" />
					</div>
				</td>
			</tr>
			</table>
		</body>
		</html>

	</xsl:template>

</xsl:stylesheet>
