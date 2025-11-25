<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "<?= h($blog->title) ?>",
  "image": "<?= $this->Url->image($blog->eyecatch ?? 'default_blog.png', ['fullBase' => true]) ?>",
  "author": {
    "@type": "Person",
    "name": "Hair atelier spica"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Hair atelier spica",
    "logo": {
      "@type": "ImageObject",
      "url": "<?= $this->Url->image('hair_atelier_spica.png', ['fullBase' => true]) ?>"
    }
  },
  "datePublished": "<?= $blog->created->format('Y-m-d') ?>",
  "dateModified": "<?= $blog->modified->format('Y-m-d') ?>",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?= $this->Url->build(['action' => 'viewPublishedAdmin', $blog->id], ['fullBase' => true]) ?>"
  },
  "articleBody": "<?= h(strip_tags($blog->content)) ?>"
}
</script>