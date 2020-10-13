<template>
  <div class="showcase">
    <carousel :per-page="4" :navigate-to="someLocalProperty" :mouse-drag="false">
      <slide>
        Slide 1 Content
      </slide>
      <slide>
        Slide 2 Content
      </slide>
      <slide>
        Slide 3 Content
      </slide>
      <slide>
        Slide 4 Content
      </slide>
      <slide>
        Slide 5 Content
      </slide>
    </carousel>
  </div>
</template>

<script>
export default {
  name: 'Showcase',
}
</script>
