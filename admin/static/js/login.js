/**
 * JParticles 特效
 */
new JParticles.particle(".particle", {
    // 两粒子圆心点之间的直线距离为 160
    proximity: 160,
    // 定位点半径 100 以内（包含）的所有粒子，圆心点之间小于等于 proximity 值，则连线
    range: 100
});
