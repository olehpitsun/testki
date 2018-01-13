package PRO.lab1;

class indirectThread extends Thread
{
    @Override
    public void run()
    {
        System.out.println("Виконується побічний потік");
    }
}

public class ThreadExample {

    static indirectThread indirectThread;

    public static void main(String[] args) {

        indirectThread = new indirectThread();
        indirectThread.start();

        System.out.println("Головний потік");

    }
}
