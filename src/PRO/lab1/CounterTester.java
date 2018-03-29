package PRO.lab1;

/**
 * Created by Oleh on 13.01.2018.
 *
 * запустити 200 потоків класу CounterThread
 * метод increaseCounter викликається 1000 разів (змінна counter збільшується на 1)
 *
 * ОЧІКУВАННЯ 200 потоків * 1000 операцій -> 200000
 *
 * РЕАЛЬНІСТЬ
 * 1) Значення змінної counter зчитується в регістр
 * 2) Значення змінної counter збільшується на 1
 * 3) Нове значення записується в регістр
 *
 * ПРОБЛЕМА: Два потоки одночасно зчитують значення змінної і одночасно збільшують його на 1
 *
 */
public class CounterTester
{
    public static void main(String[] args) throws InterruptedException {
        Counter counter = new Counter();
        for(int i=0; i<200; i++) {
            CounterThread ct = new CounterThread(counter);
            ct.start();
        }
        Thread.sleep(1000);

        System.out.println("Counter:" + counter.getCounter());
    }
}

class Counter
{
    private long counter = 0L;

    public synchronized void increaseCounter() {
        counter++;
    }

    public long getCounter() {
        return counter;
    }
}

class CounterThread extends Thread
{
    private Counter counter;

    public CounterThread(Counter counter) {
        this.counter = counter;
    }

    @Override
    public void run() {
        for(int i=0; i<1000; i++) {
            counter.increaseCounter();
        }
    }
}
