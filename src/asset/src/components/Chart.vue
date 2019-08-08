<template>
    <div>
        <GChart
                type="ColumnChart"
                :data="data"
                :options="options"
        />
    </div>
</template>
<script>
module.exports = {
  name: 'chart',
  props: ['data', 'options'],
}
</script>

<style scoped>
    p {
        font-size: 2em;
        text-align: center;
    }
</style>
