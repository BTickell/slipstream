public class Game {
	public int dimX;
	public int dimY;
	public int[][] grid;

	public Game(int x, int y) {
		this.dimX = x;
		this.dimY = y;
		this.grid = new int[x][y];
	}

	public void play() {
		// Print the array;
		for (int i = 0; i < this.dimX; i += 1) {
			for (int j = 0; j < this.dimY; j += 1) {
				System.out.println(this.grid[i][j]);
			}
		}
	}
	public static void main(String[] args) {
		Game game = new Game();
		game.play();
	}
}