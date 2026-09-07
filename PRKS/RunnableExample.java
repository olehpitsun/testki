package PRO.lab1;

public class RunnableExample {

    public static void main(String[] args) {
        Runnable task = () -> {
            String threadName = Thread.currentThread().getName();
            System.out.println("Привіт " + threadName);
        };

        task.run();

        Thread thread = new Thread(task);
        thread.start();
    }
}
