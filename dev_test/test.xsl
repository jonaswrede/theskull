<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:foo="http://www.foo.org/" xmlns:bar="http://www.bar.org">
    <xsl:template match="/">
        <html>
            <body>
                <h2>My CD Collection</h2>
                <table>
                    <tr>
                        <th>Title</th>
                    </tr>
                    <xsl:for-each select="catalog/foo:cd">
                        <tr>
                            <td><xsl:value-of select="substring-after(title,' - ')"/> </td>
                            <td><xsl:value-of select="substring-after(title,' - ')"/> </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>




backup



        <?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="UTF-8" indent="yes" omit-xml-declaration="yes" />

<xsl:template name="search-and-replace">

    <xsl:param name="input"/>
    <xsl:param name="replace"/>

    <xsl:choose>
        <xsl:when test="$replace and contains($input,$replace)">
            <xsl:value-of select="substring-after(substring-before($input,' - '),$replace)" />
        </xsl:when>
        <xsl:otherwise>
            <xsl:value-of select="substring-before($input,' - ')" />
        </xsl:otherwise>
    </xsl:choose>

</xsl:template>

<xsl:template match="/">
    <xsl:for-each select="/Msg/Props/join_rsscrs_to_recipients/join_rsscrs_to_recipient/Prop[@prop_name = 'join_rsscrs_to_channels.channel_id' and @val='705']">
        <xsl:for-each select="../join_rsscrs_to_channels/join_rssitem_to_rsschannels/join_rssitem_to_rsschannel">
            Test
            <xsl:value-of select="Prop[@prop_name = 'title']/@val" />
        </xsl:for-each>
    </xsl:for-each>
</xsl:template>
</xsl:stylesheet>