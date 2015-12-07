{% include components/head-og.php %}

<body class="blog-index">
{% include blocks/top-bar.html %}
{% include blocks/nav.html %}

<main class="outer-container">
	<section class="blog-roll">
		{% for post in site.categories.web-development %}
			<article itemscope itemtype="http://schema.org/BlogPosting" class="post-summary">
				<header id="post-titles">
					<h1 itemprop="headline"><a itemprop="mainEntityOfPage" href="/{{ post.category-link }}/{{ post.slug }}"><span itemprop="name">{{ post.article-title }}</span></a></h1>
					<h2 itemprop="description" class="subtitle">{{ post.article-subtitle }}</h2>
					<time datetime="{{ post.article-datetime }}T08:00:00-06:00">{{ post.article-time }}</time>
					<meta itemprop="datePublished" content="{{ post.article-datetime }}T08:00:00-06:00"/>
					<a itemprop="mainEntityOfPage" href="/{{ post.category-link }}/{{ post.slug }}" class="read-more blue floating">Read More</a>
				</header>
				<section id="hero-image">
					<a itemprop="mainEntityOfPage" href="/{{ post.category-link }}/{{ post.slug }}"> 
						<img itemprop="image" src="{{ site.blog_cdn }}{{ post.link-image }}" alt="{{ post.article-hero-alt }}">
					</a>
				</section>
				<footer id="post-taxonomy">
					<h4 id="category">Category | <a href="/{{ post.article-category-link }}/"><span itemprop="genre">{{ post.article-category }}</span></a></h4>
					<h4 id="tags">Tags | <a href="/tags/{{ post.article-tag-link }}"><span itemprop="keywords">{{ post.article-tag }}</span></a></h4>
				</footer>
			</article>
		{% endfor %}
	</section>
	<aside class="sidebar">
		{% include blocks/side-bar/category-title.html %}
		{% include blocks/side-bar/category-nav.html %}
	</aside>
</main>

{% include blocks/footer.html %}
{% include components/scripts/scripts.php %}
</body>
</html> 
