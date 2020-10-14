<template>
  <div class="showcase">
    <carousel :per-page="4" :mouse-drag="true">
      <slide v-for="team in teams" :key="team.name">
        <Team :data="team"></Team>
      </slide>
    </carousel>
  </div>
</template>

<script>
import Team from './Team';

export default {
  name: 'Showcase',
  components: {
    Team,
  },
  data() {
    return {
      teams: [
        {
          name: 'Team 1',
          members: [
            {
              name: 'People 1',
              role: 'SM',
            },
            {
              name: 'People 2',
              role: 'Tech Lead',
            },
            {
              name: 'People 3',
              role: 'QA',
            },
            {
              name: 'People 4',
              role: 'Dev',
            },
            {
              name: 'People 5',
              role: 'Dev',
            },
            {
              name: 'People 6',
              role: 'Dev',
            },
          ],
        },
        {
          name: 'Team 2',
          members: [],
        },
        {
          name: 'Team 3',
          members: [],
        },
        {
          name: 'Team 4',
          members: [],
        },
        {
          name: 'Team 5',
          members: [],
        },
      ],
    };
  },
}
</script>
