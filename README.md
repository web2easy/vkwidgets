# OctoberCMS VK Widgets plugin

![banner](https://raw.githubusercontent.com/web2easy/OctoberCMS-VK-Widgets-Plugin/master/assets/images/banner.png)

The compact and recognizable — add VK widgets to your site to increase visitors activity.

## Available components:

### "Comments"

This enables VK users to comment on your materials without having to register on your site.

### "Community Messages"

With the help of "Community Messages" widget you can create a fast tool for communication with VK users and add it to your website.

### "Share"

You will allow VK users to share links to your materials with their friends.

### "Community"

A Community widget links your site with your VK community. Your users will be able to subscribe to your VK feed without leaving the page.

## Available languages:

- English
- Русский

# Quickstart guide:

1. Go to the 'System' tab in October, and install the plugin using the AlexLit.VkWidgets code.
2. After installation has finished a new component will appear in under Octobers 'CMS > Components' tab. You have the option to add this to only one page, or add it to a layout making it appear on all pages that use the layout. Whichever you chose the instructions are the same.
3. Open the your selected page/layout, and add the component to it.
4. Add component code anywhere on the page/layout.
5. That's it. You now have a working VK Widget on your page. It has no outside dependencies, so you don't have to worry about anything else.

## Components options

### Comments

#### Code:

```twig
{% component 'vkComments' %}
```

#### Options
- **Open API ID:** Your API ID ([Get API ID](https://vk.com/apps?act=manage))
- **Limit:** Number of comments on the page (integer 5-100)
- **Attach:** Allows attachments in comments. String containing comma-separated types of acceptable attachments or false if media comments are disabled. Available types: graffiti, photo, audio, video, link
- **Width:** Sets module width in pixels (integer > 300)
- **Height:** Sets maximum height of the widget in pixels. Integer > 500. If 0, widget height is unlimited. If widget content is larger than the maximum allowed, internal scrolling appears
- **Auto Publish:** Automatically publish the comment to the users VK page
- **Mini Version:** Enables the mini version of the widget — smaller fonts, smaller attachment thumbnails, smaller profile pcitures in second level comments
- **Realtime Updates:** Realtime updates for the comments
- **URL of the page:** URL of the page, containing the widget. Comments that are automatically posted to the users VK page link to this URL, if autoPublish is enabled

### "Community Messages"

#### Code:

```twig
{% component 'vkCommunityMessages' %}
```

#### Options
- **Page or Group ID:** Community id the widget will be created for
- **Position:** Button position (left or right)
- **Expand in:** Expanding widget
- **Open with sound:** Enable sound when widget is expanding
- **New message sound:** New message notification sound
- **Tooltip:** Enable a tooltip
- **Tooltip text:** Community id the widget will be created for
- **Element ID:** Element ID (optional)

### "Share"

#### Code:

```twig
{% component 'vkShare' %}
```

#### Options
- **Style:** Widget layout
- **Text:** Button text
- **Link:** Page link (optional)
- **Element ID:** Element ID (optional)

### "Community"

#### Code:

```twig
{% component 'vkCommunity' %}
```

#### Options
- **Сommunity ID:** VK community ID
- **Layout:** "Members" - display community members, "Name only" — display community name only, "News" — display community feed
- **Width:** Sets module width in pixels (integer more than 120). If value is auto it adjusts to the module width
- **Height:** Sets module height in pixels (integer from 200 to 600)
- **Background color:** Widget background color in RRGGBB format
- **Text color:** Text color in RRGGBB format
- **Buttons color:** Button color in RRGGBB format
- **Wide mode:** Disabled — standard mode. Enabled — if feed is displayed, posts in this mode are displayed with the community photo and Like counts
- **Element ID:** Element ID (optional)