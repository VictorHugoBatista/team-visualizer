<template>
  <div class="showcase">
    <carousel :per-page="4" :mouse-drag="true">
      <slide>
        <Team :data="{name: 'Team 1'}"></Team>
      </slide>
      <slide>
        <Team :data="{name: 'Team 2'}"></Team>
      </slide>
      <slide>
        <Team :data="{name: 'Team 3'}"></Team>
      </slide>
      <slide>
        <Team :data="{name: 'Team 4'}"></Team>
      </slide>
      <slide>
        <Team :data="{name: 'Team 5'}"></Team>
      </slide>
    </carousel>
  </div>
</template>

<script>
import Team from './Team';

export default {
  name: 'Showcase',
  components: {
    Team
  },
}
</script>
