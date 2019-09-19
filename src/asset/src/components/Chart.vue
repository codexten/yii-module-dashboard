<template>
    <div>
        <GChart
                :type="type"
                :data="data"
                :options="chartOptions"
                :settings="settings"
        />
    </div>
</template>
<script>
module.exports = {
  name: 'chart',
  props: ['type', 'data', 'chartOptions', 'settings'],
}
</script>

<style scoped>
</style>
